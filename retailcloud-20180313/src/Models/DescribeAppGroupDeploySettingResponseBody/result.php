<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppGroupDeploySettingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 默认代码包描述
     *
     * @var string
     */
    public $defaultPacketComment;

    /**
     * @description 默认代码包id
     *
     * @var int
     */
    public $defaultPacketId;
    protected $_name = [
        'defaultPacketComment' => 'DefaultPacketComment',
        'defaultPacketId'      => 'DefaultPacketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPacketComment) {
            $res['DefaultPacketComment'] = $this->defaultPacketComment;
        }
        if (null !== $this->defaultPacketId) {
            $res['DefaultPacketId'] = $this->defaultPacketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPacketComment'])) {
            $model->defaultPacketComment = $map['DefaultPacketComment'];
        }
        if (isset($map['DefaultPacketId'])) {
            $model->defaultPacketId = $map['DefaultPacketId'];
        }

        return $model;
    }
}
