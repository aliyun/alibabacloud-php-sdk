<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafDeOrderResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var int
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $specification;
    protected $_name = [
        'expirationDate' => 'expirationDate',
        'region' => 'region',
        'specification' => 'specification',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationDate) {
            $res['expirationDate'] = $this->expirationDate;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->specification) {
            $res['specification'] = $this->specification;
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
        if (isset($map['expirationDate'])) {
            $model->expirationDate = $map['expirationDate'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['specification'])) {
            $model->specification = $map['specification'];
        }

        return $model;
    }
}
