<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdResponseBody\result\seatbid\bid;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdResponseBody\result\seatbid\bid\ads\icon;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdResponseBody\result\seatbid\bid\ads\trackers;
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
     * @description Interacttype
     *
     * @example 1
     *
     * @var int
     */
    public $interacttype;

    /**
     * @example 234543
     *
     * @var string
     */
    public $itemid;

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
     * @example 69.0
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
     * @var string
     */
    public $title;

    /**
     * @var trackers
     */
    public $trackers;
    protected $_name = [
        'crid'          => 'Crid',
        'crurl'         => 'Crurl',
        'icon'          => 'Icon',
        'id'            => 'Id',
        'interacttype'  => 'Interacttype',
        'itemid'        => 'Itemid',
        'labeltype'     => 'Labeltype',
        'landingurls'   => 'Landingurls',
        'marketingtype' => 'Marketingtype',
        'objective'     => 'Objective',
        'price'         => 'Price',
        'seat'          => 'Seat',
        'title'         => 'Title',
        'trackers'      => 'Trackers',
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
        if (null !== $this->interacttype) {
            $res['Interacttype'] = $this->interacttype;
        }
        if (null !== $this->itemid) {
            $res['Itemid'] = $this->itemid;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->trackers) {
            $res['Trackers'] = null !== $this->trackers ? $this->trackers->toMap() : null;
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
        if (isset($map['Interacttype'])) {
            $model->interacttype = $map['Interacttype'];
        }
        if (isset($map['Itemid'])) {
            $model->itemid = $map['Itemid'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Trackers'])) {
            $model->trackers = trackers::fromMap($map['Trackers']);
        }

        return $model;
    }
}
