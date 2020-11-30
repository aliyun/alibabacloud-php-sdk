<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\Tea\Model;

class DeleteBlackholeRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $packId;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'packId'   => 'PackId',
        'ip'       => 'Ip',
    ];

    public function validate()
    {
        Model::validateRequired('packId', $this->packId, true);
        Model::validateRequired('ip', $this->ip, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->packId) {
            $res['PackId'] = $this->packId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBlackholeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['PackId'])) {
            $model->packId = $map['PackId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
