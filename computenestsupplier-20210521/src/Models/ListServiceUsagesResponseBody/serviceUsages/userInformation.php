<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponseBody\serviceUsages;

use AlibabaCloud\Tea\Model;

class userInformation extends Model
{
    /**
     * @example alibaba
     *
     * @var string
     */
    public $company;

    /**
     * @example china
     *
     * @var string
     */
    public $country;

    /**
     * @example a****@xyc.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 223.2.1.3.xxxx
     *
     * @var string
     */
    public $source;

    /**
     * @example 12345xxxxxx
     *
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'company'      => 'Company',
        'country'      => 'Country',
        'emailAddress' => 'EmailAddress',
        'industry'     => 'Industry',
        'name'         => 'Name',
        'source'       => 'Source',
        'telephone'    => 'Telephone',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
