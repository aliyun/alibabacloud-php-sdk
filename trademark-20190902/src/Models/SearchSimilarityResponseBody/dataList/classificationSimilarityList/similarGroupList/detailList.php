<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody\dataList\classificationSimilarityList\similarGroupList;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'code'     => 'Code',
        'name'     => 'Name',
        'rate'     => 'Rate',
        'tmNumber' => 'TmNumber',
        'uid'      => 'Uid',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
