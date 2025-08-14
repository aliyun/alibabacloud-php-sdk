<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data;

use AlibabaCloud\Dara\Model;

class versionDetail extends Model
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
        'isLatest' => 'IsLatest',
        'releaseDate' => 'ReleaseDate',
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
            $res['IsLatest'] = $this->isLatest;
        }

        if (null !== $this->releaseDate) {
            $res['ReleaseDate'] = $this->releaseDate;
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
        if (isset($map['IsLatest'])) {
            $model->isLatest = $map['IsLatest'];
        }

        if (isset($map['ReleaseDate'])) {
            $model->releaseDate = $map['ReleaseDate'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
