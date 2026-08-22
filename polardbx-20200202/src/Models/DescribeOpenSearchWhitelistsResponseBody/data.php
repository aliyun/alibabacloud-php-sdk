<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchWhitelistsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchWhitelistsResponseBody\data\whitelists;

class data extends Model
{
    /**
     * @var whitelists[]
     */
    public $whitelists;
    protected $_name = [
        'whitelists' => 'Whitelists',
    ];

    public function validate()
    {
        if (\is_array($this->whitelists)) {
            Model::validateArray($this->whitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whitelists) {
            if (\is_array($this->whitelists)) {
                $res['Whitelists'] = [];
                $n1 = 0;
                foreach ($this->whitelists as $item1) {
                    $res['Whitelists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Whitelists'])) {
            if (!empty($map['Whitelists'])) {
                $model->whitelists = [];
                $n1 = 0;
                foreach ($map['Whitelists'] as $item1) {
                    $model->whitelists[$n1] = whitelists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
