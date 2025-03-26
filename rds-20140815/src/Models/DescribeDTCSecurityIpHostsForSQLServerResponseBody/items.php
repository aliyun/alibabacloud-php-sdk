<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponseBody\items\whiteListGroups;

class items extends Model
{
    /**
     * @var whiteListGroups[]
     */
    public $whiteListGroups;
    protected $_name = [
        'whiteListGroups' => 'WhiteListGroups',
    ];

    public function validate()
    {
        if (\is_array($this->whiteListGroups)) {
            Model::validateArray($this->whiteListGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteListGroups) {
            if (\is_array($this->whiteListGroups)) {
                $res['WhiteListGroups'] = [];
                $n1 = 0;
                foreach ($this->whiteListGroups as $item1) {
                    $res['WhiteListGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WhiteListGroups'])) {
            if (!empty($map['WhiteListGroups'])) {
                $model->whiteListGroups = [];
                $n1 = 0;
                foreach ($map['WhiteListGroups'] as $item1) {
                    $model->whiteListGroups[$n1++] = whiteListGroups::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
