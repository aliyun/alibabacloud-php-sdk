<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class ListClientCertificateRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The unique identifier of the client certificate or the server certificate that you want to query.
     *
     * >  You can call the [ListClientCertificate](https://help.aliyun.com/document_detail/330884.html) operation to query the unique identifiers of all client certificates and server certificates.
     *
     * @example 190ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The number of certificates to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'identifier' => 'Identifier',
        'showSize' => 'ShowSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
