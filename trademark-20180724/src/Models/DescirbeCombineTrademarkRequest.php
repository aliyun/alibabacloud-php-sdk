<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class DescirbeCombineTrademarkRequest extends Model
{
    /**
     * @var bool
     */
    public $accurateMatch;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerName;

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
    public $products;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var string
     */
    public $similarGroups;
    protected $_name = [
        'accurateMatch'      => 'AccurateMatch',
        'classification'     => 'Classification',
        'name'               => 'Name',
        'ownerName'          => 'OwnerName',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'products'           => 'Products',
        'registrationNumber' => 'RegistrationNumber',
        'similarGroups'      => 'SimilarGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accurateMatch) {
            $res['AccurateMatch'] = $this->accurateMatch;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->products) {
            $res['Products'] = $this->products;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->similarGroups) {
            $res['SimilarGroups'] = $this->similarGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescirbeCombineTrademarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccurateMatch'])) {
            $model->accurateMatch = $map['AccurateMatch'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Products'])) {
            $model->products = $map['Products'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['SimilarGroups'])) {
            $model->similarGroups = $map['SimilarGroups'];
        }

        return $model;
    }
}
