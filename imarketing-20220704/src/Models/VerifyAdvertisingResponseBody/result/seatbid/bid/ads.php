<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingResponseBody\result\seatbid\bid;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingResponseBody\result\seatbid\bid\ads\icon;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingResponseBody\result\seatbid\bid\ads\images;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingResponseBody\result\seatbid\bid\ads\trackers;
use AlibabaCloud\Tea\Model;

class ads extends Model
{
    /**
     * @description crid
     *
     * @example 23435345
     *
     * @var string
     */
    public $crid;

    /**
     * @example www.taobao.com
     *
     * @var string
     */
    public $crurl;

    /**
     * @var icon
     */
    public $icon;

    /**
     * @example 51313927061504
     *
     * @var string
     */
    public $id;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @description Interacttype
     *
     * @example 1
     *
     * @var int
     */
    public $interacttype;

    /**
     * @var string
     */
    public $labeltype;

    /**
     * @var string[]
     */
    public $landingurls;

    /**
     * @example OnlineStoreMember
     *
     * @var string
     */
    public $marketingtype;

    /**
     * @example SINGLE_ACQUISITION
     *
     * @var string
     */
    public $objective;

    /**
     * @example 805.22
     *
     * @var string
     */
    public $price;

    /**
     * @description seat
     *
     * @example 645534523
     *
     * @var string
     */
    public $seat;

    /**
     * @example 1302
     *
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $title;

    /**
     * @var trackers
     */
    public $trackers;

    /**
     * @example 5
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'crid'          => 'Crid',
        'crurl'         => 'Crurl',
        'icon'          => 'Icon',
        'id'            => 'Id',
        'images'        => 'Images',
        'interacttype'  => 'Interacttype',
        'labeltype'     => 'Labeltype',
        'landingurls'   => 'Landingurls',
        'marketingtype' => 'Marketingtype',
        'objective'     => 'Objective',
        'price'         => 'Price',
        'seat'          => 'Seat',
        'style'         => 'Style',
        'title'         => 'Title',
        'trackers'      => 'Trackers',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crid) {
            $res['Crid'] = $this->crid;
        }
        if (null !== $this->crurl) {
            $res['Crurl'] = $this->crurl;
        }
        if (null !== $this->icon) {
            $res['Icon'] = null !== $this->icon ? $this->icon->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->interacttype) {
            $res['Interacttype'] = $this->interacttype;
        }
        if (null !== $this->labeltype) {
            $res['Labeltype'] = $this->labeltype;
        }
        if (null !== $this->landingurls) {
            $res['Landingurls'] = $this->landingurls;
        }
        if (null !== $this->marketingtype) {
            $res['Marketingtype'] = $this->marketingtype;
        }
        if (null !== $this->objective) {
            $res['Objective'] = $this->objective;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->trackers) {
            $res['Trackers'] = null !== $this->trackers ? $this->trackers->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ads
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Crid'])) {
            $model->crid = $map['Crid'];
        }
        if (isset($map['Crurl'])) {
            $model->crurl = $map['Crurl'];
        }
        if (isset($map['Icon'])) {
            $model->icon = icon::fromMap($map['Icon']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Interacttype'])) {
            $model->interacttype = $map['Interacttype'];
        }
        if (isset($map['Labeltype'])) {
            $model->labeltype = $map['Labeltype'];
        }
        if (isset($map['Landingurls'])) {
            if (!empty($map['Landingurls'])) {
                $model->landingurls = $map['Landingurls'];
            }
        }
        if (isset($map['Marketingtype'])) {
            $model->marketingtype = $map['Marketingtype'];
        }
        if (isset($map['Objective'])) {
            $model->objective = $map['Objective'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Trackers'])) {
            $model->trackers = trackers::fromMap($map['Trackers']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
