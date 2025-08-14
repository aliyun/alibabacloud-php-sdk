<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAllowedPrefixHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class allowedPrefixHistoryList extends Model
{
    /**
     * @var string[]
     */
    public $allowedPrefix;

    /**
     * @var string
     */
    public $gmtCreate;
    protected $_name = [
        'allowedPrefix' => 'AllowedPrefix',
        'gmtCreate' => 'GmtCreate',
    ];

    public function validate()
    {
        if (\is_array($this->allowedPrefix)) {
            Model::validateArray($this->allowedPrefix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedPrefix) {
            if (\is_array($this->allowedPrefix)) {
                $res['AllowedPrefix'] = [];
                $n1 = 0;
                foreach ($this->allowedPrefix as $item1) {
                    $res['AllowedPrefix'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['AllowedPrefix'])) {
            if (!empty($map['AllowedPrefix'])) {
                $model->allowedPrefix = [];
                $n1 = 0;
                foreach ($map['AllowedPrefix'] as $item1) {
                    $model->allowedPrefix[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
