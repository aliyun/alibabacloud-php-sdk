<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListPhoneTagsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string[]
     */
    public $numberGroupIds;

    /**
     * @var bool
     */
    public $outboundOnly;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'instanceId'     => 'InstanceId',
        'number'         => 'Number',
        'numberGroupIds' => 'NumberGroupIds',
        'outboundOnly'   => 'OutboundOnly',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberGroupIds) {
            $res['NumberGroupIds'] = $this->numberGroupIds;
        }
        if (null !== $this->outboundOnly) {
            $res['OutboundOnly'] = $this->outboundOnly;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhoneTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberGroupIds'])) {
            if (!empty($map['NumberGroupIds'])) {
                $model->numberGroupIds = $map['NumberGroupIds'];
            }
        }
        if (isset($map['OutboundOnly'])) {
            $model->outboundOnly = $map['OutboundOnly'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
