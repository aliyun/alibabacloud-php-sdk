<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeConfiguredDomainNamesResponseBody;

use AlibabaCloud\Dara\Model;

class domainNames extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $isMalicious;

    /**
     * @var int
     */
    public $operationTime;
    protected $_name = [
        'comment' => 'Comment',
        'domainName' => 'DomainName',
        'isMalicious' => 'IsMalicious',
        'operationTime' => 'OperationTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->isMalicious) {
            $res['IsMalicious'] = $this->isMalicious;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['IsMalicious'])) {
            $model->isMalicious = $map['IsMalicious'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        return $model;
    }
}
