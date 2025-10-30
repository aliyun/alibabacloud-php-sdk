<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateServerCertificateWithCsrRequest\tags;

class CreateServerCertificateWithCsrRequest extends Model
{
    /**
     * @var int
     */
    public $afterTime;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var int
     */
    public $beforeTime;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var int
     */
    public $days;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $enableCrl;

    /**
     * @var int
     */
    public $immediately;

    /**
     * @var string
     */
    public $locality;

    /**
     * @var int
     */
    public $months;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $organizationUnit;

    /**
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $years;
    protected $_name = [
        'afterTime' => 'AfterTime',
        'algorithm' => 'Algorithm',
        'beforeTime' => 'BeforeTime',
        'commonName' => 'CommonName',
        'country' => 'Country',
        'csr' => 'Csr',
        'days' => 'Days',
        'domain' => 'Domain',
        'enableCrl' => 'EnableCrl',
        'immediately' => 'Immediately',
        'locality' => 'Locality',
        'months' => 'Months',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'resourceGroupId' => 'ResourceGroupId',
        'state' => 'State',
        'tags' => 'Tags',
        'years' => 'Years',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterTime) {
            $res['AfterTime'] = $this->afterTime;
        }

        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->enableCrl) {
            $res['EnableCrl'] = $this->enableCrl;
        }

        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
        }

        if (null !== $this->locality) {
            $res['Locality'] = $this->locality;
        }

        if (null !== $this->months) {
            $res['Months'] = $this->months;
        }

        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }

        if (null !== $this->organizationUnit) {
            $res['OrganizationUnit'] = $this->organizationUnit;
        }

        if (null !== $this->parentIdentifier) {
            $res['ParentIdentifier'] = $this->parentIdentifier;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->years) {
            $res['Years'] = $this->years;
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
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }

        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EnableCrl'])) {
            $model->enableCrl = $map['EnableCrl'];
        }

        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
        }

        if (isset($map['Locality'])) {
            $model->locality = $map['Locality'];
        }

        if (isset($map['Months'])) {
            $model->months = $map['Months'];
        }

        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }

        if (isset($map['OrganizationUnit'])) {
            $model->organizationUnit = $map['OrganizationUnit'];
        }

        if (isset($map['ParentIdentifier'])) {
            $model->parentIdentifier = $map['ParentIdentifier'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
