<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\editionInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var directoryTree[]
     */
    public $directoryTree;

    /**
     * @var editionInfo
     */
    public $editionInfo;
    protected $_name = [
        'directoryTree' => 'directoryTree',
        'editionInfo'   => 'editionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryTree) {
            $res['directoryTree'] = [];
            if (null !== $this->directoryTree && \is_array($this->directoryTree)) {
                $n = 0;
                foreach ($this->directoryTree as $item) {
                    $res['directoryTree'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->editionInfo) {
            $res['editionInfo'] = null !== $this->editionInfo ? $this->editionInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['directoryTree'])) {
            if (!empty($map['directoryTree'])) {
                $model->directoryTree = [];
                $n                    = 0;
                foreach ($map['directoryTree'] as $item) {
                    $model->directoryTree[$n++] = null !== $item ? directoryTree::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['editionInfo'])) {
            $model->editionInfo = editionInfo::fromMap($map['editionInfo']);
        }

        return $model;
    }
}
