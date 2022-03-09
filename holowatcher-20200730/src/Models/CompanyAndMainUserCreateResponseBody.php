<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyAndMainUserCreateResponseBody\company;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyAndMainUserCreateResponseBody\main;
use AlibabaCloud\Tea\Model;

class CompanyAndMainUserCreateResponseBody extends Model
{
    /**
     * @var company
     */
    public $company;

    /**
     * @var main
     */
    public $main;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'company'   => 'Company',
        'main'      => 'Main',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->company) {
            $res['Company'] = null !== $this->company ? $this->company->toMap() : null;
        }
        if (null !== $this->main) {
            $res['Main'] = null !== $this->main ? $this->main->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompanyAndMainUserCreateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Company'])) {
            $model->company = company::fromMap($map['Company']);
        }
        if (isset($map['Main'])) {
            $model->main = main::fromMap($map['Main']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
