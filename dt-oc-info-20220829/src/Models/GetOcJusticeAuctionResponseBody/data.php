<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeAuctionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auctionDate;

    /**
     * @var string
     */
    public $auctionName;

    /**
     * @var string
     */
    public $basis;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $court;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $estPrice;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $restrict;

    /**
     * @var string
     */
    public $startPrice;
    protected $_name = [
        'auctionDate' => 'AuctionDate',
        'auctionName' => 'AuctionName',
        'basis'       => 'Basis',
        'certificate' => 'Certificate',
        'court'       => 'Court',
        'description' => 'Description',
        'document'    => 'Document',
        'entName'     => 'EntName',
        'estPrice'    => 'EstPrice',
        'owner'       => 'Owner',
        'restrict'    => 'Restrict',
        'startPrice'  => 'StartPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionDate) {
            $res['AuctionDate'] = $this->auctionDate;
        }
        if (null !== $this->auctionName) {
            $res['AuctionName'] = $this->auctionName;
        }
        if (null !== $this->basis) {
            $res['Basis'] = $this->basis;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->document) {
            $res['Document'] = $this->document;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->estPrice) {
            $res['EstPrice'] = $this->estPrice;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->restrict) {
            $res['Restrict'] = $this->restrict;
        }
        if (null !== $this->startPrice) {
            $res['StartPrice'] = $this->startPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionDate'])) {
            $model->auctionDate = $map['AuctionDate'];
        }
        if (isset($map['AuctionName'])) {
            $model->auctionName = $map['AuctionName'];
        }
        if (isset($map['Basis'])) {
            $model->basis = $map['Basis'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Document'])) {
            $model->document = $map['Document'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['EstPrice'])) {
            $model->estPrice = $map['EstPrice'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Restrict'])) {
            $model->restrict = $map['Restrict'];
        }
        if (isset($map['StartPrice'])) {
            $model->startPrice = $map['StartPrice'];
        }

        return $model;
    }
}
