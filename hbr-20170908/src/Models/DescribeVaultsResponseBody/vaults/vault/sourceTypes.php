<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceType'])) {
            if (!empty($map['SourceType'])) {
                $model->sourceType = $map['SourceType'];
            }
        }

        return $model;
    }
}
