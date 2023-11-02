<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEntityInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $entityId;

    /**
     * @example { location: "xian", net_connect_dir: "in", malware_type: "${aliyun.siem.sas.alert_tag.login_unusual_account}" }
     *
     * @var mixed[]
     */
    public $entityInfo;

    /**
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $tipInfo;
    protected $_name = [
        'entityId'   => 'EntityId',
        'entityInfo' => 'EntityInfo',
        'entityType' => 'EntityType',
        'tipInfo'    => 'TipInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityInfo) {
            $res['EntityInfo'] = $this->entityInfo;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->tipInfo) {
            $res['TipInfo'] = $this->tipInfo;
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
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityInfo'])) {
            $model->entityInfo = $map['EntityInfo'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['TipInfo'])) {
            $model->tipInfo = $map['TipInfo'];
        }

        return $model;
    }
}
