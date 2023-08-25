<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the template is deleted. Valid values:
     *
     *   **true**: The template is deleted.
     *   **false**: The template fails to be deleted.
     *
     * @example True
     *
     * @var bool
     */
    public $succeeded;
    protected $_name = [
        'succeeded' => 'Succeeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        return $model;
    }
}
