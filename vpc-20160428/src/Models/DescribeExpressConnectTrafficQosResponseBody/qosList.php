<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\associatedInstanceList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\queueList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\tags;

class qosList extends Model
{
    /**
     * @var associatedInstanceList[]
     */
    public $associatedInstanceList;
    /**
     * @var int
     */
    public $progressing;
    /**
     * @var string
     */
    public $qosDescription;
    /**
     * @var string
     */
    public $qosId;
    /**
     * @var string
     */
    public $qosName;
    /**
     * @var queueList[]
     */
    public $queueList;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'associatedInstanceList' => 'AssociatedInstanceList',
        'progressing'            => 'Progressing',
        'qosDescription'         => 'QosDescription',
        'qosId'                  => 'QosId',
        'qosName'                => 'QosName',
        'queueList'              => 'QueueList',
        'resourceGroupId'        => 'ResourceGroupId',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->associatedInstanceList)) {
            Model::validateArray($this->associatedInstanceList);
        }
        if (\is_array($this->queueList)) {
            Model::validateArray($this->queueList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedInstanceList) {
            if (\is_array($this->associatedInstanceList)) {
                $res['AssociatedInstanceList'] = [];
                $n1                            = 0;
                foreach ($this->associatedInstanceList as $item1) {
                    $res['AssociatedInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->queueList)) {
                $res['QueueList'] = [];
                $n1               = 0;
                foreach ($this->queueList as $item1) {
                    $res['QueueList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssociatedInstanceList'])) {
            if (!empty($map['AssociatedInstanceList'])) {
                $model->associatedInstanceList = [];
                $n1                            = 0;
                foreach ($map['AssociatedInstanceList'] as $item1) {
                    $model->associatedInstanceList[$n1++] = associatedInstanceList::fromMap($item1);
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
                $n1               = 0;
                foreach ($map['QueueList'] as $item1) {
                    $model->queueList[$n1++] = queueList::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
