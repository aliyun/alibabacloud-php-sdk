<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListCodeSourcesResponseBody extends Model
{
    /**
     * @var CodeSourceItem[]
     */
    public $codeSources;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'codeSources' => 'CodeSources',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->codeSources)) {
            Model::validateArray($this->codeSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeSources) {
            if (\is_array($this->codeSources)) {
                $res['CodeSources'] = [];
                $n1                 = 0;
                foreach ($this->codeSources as $item1) {
                    $res['CodeSources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CodeSources'])) {
            if (!empty($map['CodeSources'])) {
                $model->codeSources = [];
                $n1                 = 0;
                foreach ($map['CodeSources'] as $item1) {
                    $model->codeSources[$n1++] = CodeSourceItem::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
