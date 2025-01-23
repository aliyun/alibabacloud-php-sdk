<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Dara\Model;

class sourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $sourceType;
    protected $_name = [
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->sourceType)) {
            Model::validateArray($this->sourceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceType) {
            if (\is_array($this->sourceType)) {
                $res['SourceType'] = [];
                $n1                = 0;
                foreach ($this->sourceType as $item1) {
                    $res['SourceType'][$n1++] = $item1;
                }
            }
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
        if (isset($map['SourceType'])) {
            if (!empty($map['SourceType'])) {
                $model->sourceType = [];
                $n1                = 0;
                foreach ($map['SourceType'] as $item1) {
                    $model->sourceType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
