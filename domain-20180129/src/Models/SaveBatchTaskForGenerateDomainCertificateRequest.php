<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveBatchTaskForGenerateDomainCertificateRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainNames;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->domainNames)) {
            Model::validateArray($this->domainNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            if (\is_array($this->domainNames)) {
                $res['DomainNames'] = [];
                $n1 = 0;
                foreach ($this->domainNames as $item1) {
                    $res['DomainNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['DomainNames'])) {
            if (!empty($map['DomainNames'])) {
                $model->domainNames = [];
                $n1 = 0;
                foreach ($map['DomainNames'] as $item1) {
                    $model->domainNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
