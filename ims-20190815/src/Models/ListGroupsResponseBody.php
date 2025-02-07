<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsResponseBody\groups;

class ListGroupsResponseBody extends Model
{
    /**
     * @var groups
     */
    public $groups;
    /**
     * @var bool
     */
    public $isTruncated;
    /**
     * @var string
     */
    public $marker;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groups'      => 'Groups',
        'isTruncated' => 'IsTruncated',
        'marker'      => 'Marker',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->groups) {
            $this->groups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toArray($noStream) : $this->groups;
        }

        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }

        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
