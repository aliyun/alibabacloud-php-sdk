<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLicenseInfosResponseBody\licenseList;

class ListLicenseInfosResponseBody extends Model
{
    /**
     * @var licenseList[]
     */
    public $licenseList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'licenseList' => 'LicenseList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->licenseList)) {
            Model::validateArray($this->licenseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->licenseList) {
            if (\is_array($this->licenseList)) {
                $res['LicenseList'] = [];
                $n1 = 0;
                foreach ($this->licenseList as $item1) {
                    $res['LicenseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['LicenseList'])) {
            if (!empty($map['LicenseList'])) {
                $model->licenseList = [];
                $n1 = 0;
                foreach ($map['LicenseList'] as $item1) {
                    $model->licenseList[$n1] = licenseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
