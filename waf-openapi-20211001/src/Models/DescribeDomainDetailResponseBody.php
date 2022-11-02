<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect;
use AlibabaCloud\Tea\Model;

class DescribeDomainDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var listen
     */
    public $listen;

    /**
     * @var redirect
     */
    public $redirect;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'cname'     => 'Cname',
        'domain'    => 'Domain',
        'listen'    => 'Listen',
        'redirect'  => 'Redirect',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toMap() : null;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Listen'])) {
            $model->listen = listen::fromMap($map['Listen']);
        }
        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
