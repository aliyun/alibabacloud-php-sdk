<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images\imageInfo;

use AlibabaCloud\Dara\Model;

class baseOsTag extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'architecture' => 'Architecture',
        'osTag' => 'OsTag',
        'platform' => 'Platform',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
