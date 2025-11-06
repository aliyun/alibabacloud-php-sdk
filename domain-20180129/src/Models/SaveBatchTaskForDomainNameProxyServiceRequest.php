<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveBatchTaskForDomainNameProxyServiceRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'status' => 'Status',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->domainName)) {
            Model::validateArray($this->domainName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            if (\is_array($this->domainName)) {
                $res['DomainName'] = [];
                $n1 = 0;
                foreach ($this->domainName as $item1) {
                    $res['DomainName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = [];
                $n1 = 0;
                foreach ($map['DomainName'] as $item1) {
                    $model->domainName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
