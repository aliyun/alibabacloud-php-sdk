<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AppVersionQueryServiceRequest extends Model
{
    /**
     * @var string
     */
    public $keySearch;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestApp;
    protected $_name = [
        'keySearch'  => 'KeySearch',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestApp' => 'RequestApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keySearch) {
            $res['KeySearch'] = $this->keySearch;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestApp) {
            $res['RequestApp'] = $this->requestApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppVersionQueryServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeySearch'])) {
            $model->keySearch = $map['KeySearch'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestApp'])) {
            $model->requestApp = $map['RequestApp'];
        }

        return $model;
    }
}
