<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListPhoneTagsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $outboundOnly;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string[]
     */
    public $numberGroupIds;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'outboundOnly'   => 'OutboundOnly',
        'pageSize'       => 'PageSize',
        'currentPage'    => 'CurrentPage',
        'number'         => 'Number',
        'numberGroupIds' => 'NumberGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundOnly) {
            $res['OutboundOnly'] = $this->outboundOnly;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberGroupIds) {
            $res['NumberGroupIds'] = $this->numberGroupIds;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundOnly'])) {
            $model->outboundOnly = $map['OutboundOnly'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberGroupIds'])) {
            if (!empty($map['NumberGroupIds'])) {
                $model->numberGroupIds = $map['NumberGroupIds'];
            }
        }

        return $model;
    }
}
