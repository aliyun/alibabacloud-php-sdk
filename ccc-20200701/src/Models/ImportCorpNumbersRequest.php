<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ImportCorpNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $corpName;
    /**
     * @var string
     */
    public $numberList;
    /**
     * @var string
     */
    public $provider;
    /**
     * @var string
     */
    public $province;
    /**
     * @var string
     */
    public $tagList;
    protected $_name = [
        'city'       => 'City',
        'corpName'   => 'CorpName',
        'numberList' => 'NumberList',
        'provider'   => 'Provider',
        'province'   => 'Province',
        'tagList'    => 'TagList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }

        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
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
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }

        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['TagList'])) {
            $model->tagList = $map['TagList'];
        }

        return $model;
    }
}
