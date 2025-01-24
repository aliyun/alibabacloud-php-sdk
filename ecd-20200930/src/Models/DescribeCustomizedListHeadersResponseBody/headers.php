<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCustomizedListHeadersResponseBody;

use AlibabaCloud\Dara\Model;

class headers extends Model
{
    /**
     * @var string
     */
    public $displayType;
    /**
     * @var string
     */
    public $headerKey;
    /**
     * @var string
     */
    public $headerName;
    protected $_name = [
        'displayType' => 'DisplayType',
        'headerKey'   => 'HeaderKey',
        'headerName'  => 'HeaderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayType) {
            $res['DisplayType'] = $this->displayType;
        }

        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
        }

        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
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
        if (isset($map['DisplayType'])) {
            $model->displayType = $map['DisplayType'];
        }

        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }

        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }

        return $model;
    }
}
