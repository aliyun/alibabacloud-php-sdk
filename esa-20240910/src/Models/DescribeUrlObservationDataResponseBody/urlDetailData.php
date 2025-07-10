<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeUrlObservationDataResponseBody;

use AlibabaCloud\Dara\Model;

class urlDetailData extends Model
{
    /**
     * @var float
     */
    public $CLS;

    /**
     * @var string
     */
    public $clientPlatform;

    /**
     * @var string
     */
    public $country;

    /**
     * @var float
     */
    public $FCP;

    /**
     * @var float
     */
    public $FID;

    /**
     * @var float
     */
    public $INP;

    /**
     * @var float
     */
    public $LCP;

    /**
     * @var float
     */
    public $TTFB;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'CLS' => 'CLS',
        'clientPlatform' => 'ClientPlatform',
        'country' => 'Country',
        'FCP' => 'FCP',
        'FID' => 'FID',
        'INP' => 'INP',
        'LCP' => 'LCP',
        'TTFB' => 'TTFB',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CLS) {
            $res['CLS'] = $this->CLS;
        }

        if (null !== $this->clientPlatform) {
            $res['ClientPlatform'] = $this->clientPlatform;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->FCP) {
            $res['FCP'] = $this->FCP;
        }

        if (null !== $this->FID) {
            $res['FID'] = $this->FID;
        }

        if (null !== $this->INP) {
            $res['INP'] = $this->INP;
        }

        if (null !== $this->LCP) {
            $res['LCP'] = $this->LCP;
        }

        if (null !== $this->TTFB) {
            $res['TTFB'] = $this->TTFB;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CLS'])) {
            $model->CLS = $map['CLS'];
        }

        if (isset($map['ClientPlatform'])) {
            $model->clientPlatform = $map['ClientPlatform'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['FCP'])) {
            $model->FCP = $map['FCP'];
        }

        if (isset($map['FID'])) {
            $model->FID = $map['FID'];
        }

        if (isset($map['INP'])) {
            $model->INP = $map['INP'];
        }

        if (isset($map['LCP'])) {
            $model->LCP = $map['LCP'];
        }

        if (isset($map['TTFB'])) {
            $model->TTFB = $map['TTFB'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
