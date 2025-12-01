<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponseBody;

use AlibabaCloud\Dara\Model;

class internetIPs extends Model
{
    /**
     * @var string[]
     */
    public $internetIP;
    protected $_name = [
        'internetIP' => 'InternetIP',
    ];

    public function validate()
    {
        if (\is_array($this->internetIP)) {
            Model::validateArray($this->internetIP);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetIP) {
            if (\is_array($this->internetIP)) {
                $res['InternetIP'] = [];
                $n1 = 0;
                foreach ($this->internetIP as $item1) {
                    $res['InternetIP'][$n1] = $item1;
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
        if (isset($map['InternetIP'])) {
            if (!empty($map['InternetIP'])) {
                $model->internetIP = [];
                $n1 = 0;
                foreach ($map['InternetIP'] as $item1) {
                    $model->internetIP[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
