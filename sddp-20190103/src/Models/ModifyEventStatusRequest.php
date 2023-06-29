<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventStatusRequest extends Model
{
    /**
     * @description Specifies whether to enhance the detection of anomalous events. If you enhance the detection of anomalous events, the detection accuracy and the rate of triggering alerts for anomalous events are improved. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $backed;

    /**
     * @description The reason why the anomalous event is handled.
     *
     * @example Anomaly confirmed
     *
     * @var string
     */
    public $dealReason;

    /**
     * @description The ID of the anomalous event.
     *
     * > You can call the **DescribeEvents** operation to query the ID of the anomalous event.
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The method to handle the anomalous event. Valid values:
     *
     *   **1**: marks the anomalous event as a false positive.
     *   **2**: confirms and handles the anomalous event.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'backed'     => 'Backed',
        'dealReason' => 'DealReason',
        'id'         => 'Id',
        'lang'       => 'Lang',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backed) {
            $res['Backed'] = $this->backed;
        }
        if (null !== $this->dealReason) {
            $res['DealReason'] = $this->dealReason;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backed'])) {
            $model->backed = $map['Backed'];
        }
        if (isset($map['DealReason'])) {
            $model->dealReason = $map['DealReason'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
