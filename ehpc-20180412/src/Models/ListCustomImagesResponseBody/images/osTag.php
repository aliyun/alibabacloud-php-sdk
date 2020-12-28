<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class osTag extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $architecture;
    protected $_name = [
        'version'      => 'Version',
        'baseOsTag'    => 'BaseOsTag',
        'platform'     => 'Platform',
        'osTag'        => 'OsTag',
        'architecture' => 'Architecture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        return $model;
    }
}
