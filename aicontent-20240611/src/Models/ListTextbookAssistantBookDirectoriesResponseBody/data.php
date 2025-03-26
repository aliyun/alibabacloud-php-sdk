<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\editionInfo;

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
        'editionInfo' => 'editionInfo',
    ];

    public function validate()
    {
        if (\is_array($this->directoryTree)) {
            Model::validateArray($this->directoryTree);
        }
        if (null !== $this->editionInfo) {
            $this->editionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryTree) {
            if (\is_array($this->directoryTree)) {
                $res['directoryTree'] = [];
                $n1 = 0;
                foreach ($this->directoryTree as $item1) {
                    $res['directoryTree'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->editionInfo) {
            $res['editionInfo'] = null !== $this->editionInfo ? $this->editionInfo->toArray($noStream) : $this->editionInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['directoryTree'])) {
            if (!empty($map['directoryTree'])) {
                $model->directoryTree = [];
                $n1 = 0;
                foreach ($map['directoryTree'] as $item1) {
                    $model->directoryTree[$n1++] = directoryTree::fromMap($item1);
                }
            }
        }

        if (isset($map['editionInfo'])) {
            $model->editionInfo = editionInfo::fromMap($map['editionInfo']);
        }

        return $model;
    }
}
