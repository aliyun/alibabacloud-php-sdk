<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\associatedInstanceList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\queueList;
use AlibabaCloud\Tea\Model;

class qosList extends Model
{
    /**
     * @var associatedInstanceList[]
     */
    public $associatedInstanceList;

    /**
     * @example 100
     *
     * @var int
     */
    public $progressing;

    /**
     * @example qos-test
     *
     * @var string
     */
    public $qosDescription;

    /**
     * @example qos-pksbqfmotl5hzqmhf8
     *
     * @var string
     */
    public $qosId;

    /**
     * @example qos-test
     *
     * @var string
     */
    public $qosName;

    /**
     * @var queueList[]
     */
    public $queueList;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'associatedInstanceList' => 'AssociatedInstanceList',
        'progressing'            => 'Progressing',
        'qosDescription'         => 'QosDescription',
        'qosId'                  => 'QosId',
        'qosName'                => 'QosName',
        'queueList'              => 'QueueList',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedInstanceList) {
            $res['AssociatedInstanceList'] = [];
            if (null !== $this->associatedInstanceList && \is_array($this->associatedInstanceList)) {
                $n = 0;
                foreach ($this->associatedInstanceList as $item) {
                    $res['AssociatedInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->progressing) {
            $res['Progressing'] = $this->progressing;
        }
        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = [];
            if (null !== $this->queueList && \is_array($this->queueList)) {
                $n = 0;
                foreach ($this->queueList as $item) {
                    $res['QueueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedInstanceList'])) {
            if (!empty($map['AssociatedInstanceList'])) {
                $model->associatedInstanceList = [];
                $n                             = 0;
                foreach ($map['AssociatedInstanceList'] as $item) {
                    $model->associatedInstanceList[$n++] = null !== $item ? associatedInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Progressing'])) {
            $model->progressing = $map['Progressing'];
        }
        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }
        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = [];
                $n                = 0;
                foreach ($map['QueueList'] as $item) {
                    $model->queueList[$n++] = null !== $item ? queueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
