<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\requestPerInterval;

use AlibabaCloud\Tea\Model;

class requestDataModule extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $request;
    protected $_name = [
        'type'      => 'Type',
        'domain'    => 'Domain',
        'timeStamp' => 'TimeStamp',
        'request'   => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }

        return $model;
    }
}
