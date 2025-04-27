<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponseBody\accounts\DBInstanceAccount;

class accounts extends Model
{
    /**
     * @var DBInstanceAccount[]
     */
    public $DBInstanceAccount;
    protected $_name = [
        'DBInstanceAccount' => 'DBInstanceAccount',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceAccount)) {
            Model::validateArray($this->DBInstanceAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceAccount) {
            if (\is_array($this->DBInstanceAccount)) {
                $res['DBInstanceAccount'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceAccount as $item1) {
                    $res['DBInstanceAccount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceAccount'])) {
            if (!empty($map['DBInstanceAccount'])) {
                $model->DBInstanceAccount = [];
                $n1 = 0;
                foreach ($map['DBInstanceAccount'] as $item1) {
                    $model->DBInstanceAccount[$n1++] = DBInstanceAccount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
