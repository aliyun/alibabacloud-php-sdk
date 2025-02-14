<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListSslCertsRequest extends Model
{
    /**
     * @var string
     */
    public $certNameLike;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'certNameLike' => 'certNameLike',
        'domainName'   => 'domainName',
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certNameLike) {
            $res['certNameLike'] = $this->certNameLike;
        }

        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['certNameLike'])) {
            $model->certNameLike = $map['certNameLike'];
        }

        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
