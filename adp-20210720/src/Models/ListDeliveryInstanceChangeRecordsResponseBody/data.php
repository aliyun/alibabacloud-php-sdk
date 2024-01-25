<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryInstanceChangeRecordsResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryInstanceChangeRecordsResponseBody\data\envNodeInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example deliver-glXKBVYg8qBL
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @var mixed[]
     */
    public $envChangeRecords;

    /**
     * @var envNodeInfo[]
     */
    public $envNodeInfo;

    /**
     * @example clusterId: dbd9be27-a21d-46f7-b1f0-8c9e383a9099
     * applicationModel: \"\"
     * @var string
     */
    public $envPackageConfig;

    /**
     * @example deliver-5OQqK2lMlzZV
     *
     * @var string
     */
    public $originDeliverableUID;

    /**
     * @example delivery-rec-wMVj9Kp4XW7r
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'deliverableUID'       => 'deliverableUID',
        'envChangeRecords'     => 'envChangeRecords',
        'envNodeInfo'          => 'envNodeInfo',
        'envPackageConfig'     => 'envPackageConfig',
        'originDeliverableUID' => 'originDeliverableUID',
        'uid'                  => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverableUID) {
            $res['deliverableUID'] = $this->deliverableUID;
        }
        if (null !== $this->envChangeRecords) {
            $res['envChangeRecords'] = $this->envChangeRecords;
        }
        if (null !== $this->envNodeInfo) {
            $res['envNodeInfo'] = [];
            if (null !== $this->envNodeInfo && \is_array($this->envNodeInfo)) {
                $n = 0;
                foreach ($this->envNodeInfo as $item) {
                    $res['envNodeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->envPackageConfig) {
            $res['envPackageConfig'] = $this->envPackageConfig;
        }
        if (null !== $this->originDeliverableUID) {
            $res['originDeliverableUID'] = $this->originDeliverableUID;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['envChangeRecords'])) {
            $model->envChangeRecords = $map['envChangeRecords'];
        }
        if (isset($map['envNodeInfo'])) {
            if (!empty($map['envNodeInfo'])) {
                $model->envNodeInfo = [];
                $n                  = 0;
                foreach ($map['envNodeInfo'] as $item) {
                    $model->envNodeInfo[$n++] = null !== $item ? envNodeInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['envPackageConfig'])) {
            $model->envPackageConfig = $map['envPackageConfig'];
        }
        if (isset($map['originDeliverableUID'])) {
            $model->originDeliverableUID = $map['originDeliverableUID'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
