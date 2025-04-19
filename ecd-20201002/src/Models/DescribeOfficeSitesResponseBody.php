<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeOfficeSitesResponseBody\officeSites;

class DescribeOfficeSitesResponseBody extends Model
{
    /**
     * @var officeSites[]
     */
    public $officeSites;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'officeSites' => 'OfficeSites',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->officeSites)) {
            Model::validateArray($this->officeSites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->officeSites) {
            if (\is_array($this->officeSites)) {
                $res['OfficeSites'] = [];
                $n1 = 0;
                foreach ($this->officeSites as $item1) {
                    $res['OfficeSites'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OfficeSites'])) {
            if (!empty($map['OfficeSites'])) {
                $model->officeSites = [];
                $n1 = 0;
                foreach ($map['OfficeSites'] as $item1) {
                    $model->officeSites[$n1++] = officeSites::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
