<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponseBody;

use AlibabaCloud\Dara\Model;

class intranetIPs extends Model
{
    /**
     * @var string[]
     */
    public $intranetIP;
    protected $_name = [
        'intranetIP' => 'IntranetIP',
    ];

    public function validate()
    {
        if (\is_array($this->intranetIP)) {
            Model::validateArray($this->intranetIP);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intranetIP) {
            if (\is_array($this->intranetIP)) {
                $res['IntranetIP'] = [];
                $n1 = 0;
                foreach ($this->intranetIP as $item1) {
                    $res['IntranetIP'][$n1] = $item1;
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
        if (isset($map['IntranetIP'])) {
            if (!empty($map['IntranetIP'])) {
                $model->intranetIP = [];
                $n1 = 0;
                foreach ($map['IntranetIP'] as $item1) {
                    $model->intranetIP[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
