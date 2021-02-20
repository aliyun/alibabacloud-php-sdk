<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeCrawlerRequestsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $URL;

    /**
     * @var string
     */
    public $method;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $cookies;
    protected $_name = [
        'index'     => 'Index',
        'data'      => 'Data',
        'URL'       => 'URL',
        'method'    => 'Method',
        'updatedAt' => 'UpdatedAt',
        'cookies'   => 'Cookies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Cookies'])) {
            $model->cookies = $map['Cookies'];
        }

        return $model;
    }
}
