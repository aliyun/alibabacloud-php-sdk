<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data;

use AlibabaCloud\Dara\Model;

class allVersions extends Model
{
    /**
     * @var bool
     */
    public $isLatest;

    /**
     * @var string
     */
    public $releaseDate;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'isLatest' => 'Is_latest',
        'releaseDate' => 'Release_date',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isLatest) {
            $res['Is_latest'] = $this->isLatest;
        }

        if (null !== $this->releaseDate) {
            $res['Release_date'] = $this->releaseDate;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Is_latest'])) {
            $model->isLatest = $map['Is_latest'];
        }

        if (isset($map['Release_date'])) {
            $model->releaseDate = $map['Release_date'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
