<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images\imageInfo;

use AlibabaCloud\Tea\Model;

class baseOsTag extends Model
{
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
    public $version;

    /**
     * @var string
     */
    public $architecture;
    protected $_name = [
        'platform'     => 'Platform',
        'osTag'        => 'OsTag',
        'version'      => 'Version',
        'architecture' => 'Architecture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseOsTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        return $model;
    }
}
