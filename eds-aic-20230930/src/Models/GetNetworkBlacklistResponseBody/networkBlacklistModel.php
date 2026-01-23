<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\GetNetworkBlacklistResponseBody;

use AlibabaCloud\Dara\Model;

class networkBlacklistModel extends Model
{
    /**
     * @var string[]
     */
    public $domainBlacklist;

    /**
     * @var string[]
     */
    public $ipBlacklist;
    protected $_name = [
        'domainBlacklist' => 'DomainBlacklist',
        'ipBlacklist' => 'IpBlacklist',
    ];

    public function validate()
    {
        if (\is_array($this->domainBlacklist)) {
            Model::validateArray($this->domainBlacklist);
        }
        if (\is_array($this->ipBlacklist)) {
            Model::validateArray($this->ipBlacklist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainBlacklist) {
            if (\is_array($this->domainBlacklist)) {
                $res['DomainBlacklist'] = [];
                $n1 = 0;
                foreach ($this->domainBlacklist as $item1) {
                    $res['DomainBlacklist'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipBlacklist) {
            if (\is_array($this->ipBlacklist)) {
                $res['IpBlacklist'] = [];
                $n1 = 0;
                foreach ($this->ipBlacklist as $item1) {
                    $res['IpBlacklist'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DomainBlacklist'])) {
            if (!empty($map['DomainBlacklist'])) {
                $model->domainBlacklist = [];
                $n1 = 0;
                foreach ($map['DomainBlacklist'] as $item1) {
                    $model->domainBlacklist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpBlacklist'])) {
            if (!empty($map['IpBlacklist'])) {
                $model->ipBlacklist = [];
                $n1 = 0;
                foreach ($map['IpBlacklist'] as $item1) {
                    $model->ipBlacklist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
