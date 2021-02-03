<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponse\ipSegmentList;
use AlibabaCloud\Tea\Model;

class DescribeCustomLineResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var ipSegmentList[]
     */
    public $ipSegmentList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'id'            => 'Id',
        'name'          => 'Name',
        'domainName'    => 'DomainName',
        'code'          => 'Code',
        'ipSegmentList' => 'IpSegmentList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('ipSegmentList', $this->ipSegmentList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ipSegmentList) {
            $res['IpSegmentList'] = [];
            if (null !== $this->ipSegmentList && \is_array($this->ipSegmentList)) {
                $n = 0;
                foreach ($this->ipSegmentList as $item) {
                    $res['IpSegmentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLineResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IpSegmentList'])) {
            if (!empty($map['IpSegmentList'])) {
                $model->ipSegmentList = [];
                $n                    = 0;
                foreach ($map['IpSegmentList'] as $item) {
                    $model->ipSegmentList[$n++] = null !== $item ? ipSegmentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
