<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class AddProductComponentVersionRequest extends Model
{
    /**
     * @var string
     */
    public $componentVersionSpecUID;

    /**
     * @var string
     */
    public $componentVersionSpecValues;

    /**
     * @example component-release
     *
     * @var string
     */
    public $releaseName;
    protected $_name = [
        'componentVersionSpecUID'    => 'componentVersionSpecUID',
        'componentVersionSpecValues' => 'componentVersionSpecValues',
        'releaseName'                => 'releaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentVersionSpecUID) {
            $res['componentVersionSpecUID'] = $this->componentVersionSpecUID;
        }
        if (null !== $this->componentVersionSpecValues) {
            $res['componentVersionSpecValues'] = $this->componentVersionSpecValues;
        }
        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProductComponentVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentVersionSpecUID'])) {
            $model->componentVersionSpecUID = $map['componentVersionSpecUID'];
        }
        if (isset($map['componentVersionSpecValues'])) {
            $model->componentVersionSpecValues = $map['componentVersionSpecValues'];
        }
        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }

        return $model;
    }
}
