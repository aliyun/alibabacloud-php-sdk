<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListAdvanceConfigDirRequest extends Model
{
    /**
     * @description The name of the directory
     *
     * This parameter is required.
     * @example /zones/general
     *
     * @var string
     */
    public $dirName;
    protected $_name = [
        'dirName' => 'dirName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dirName) {
            $res['dirName'] = $this->dirName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdvanceConfigDirRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dirName'])) {
            $model->dirName = $map['dirName'];
        }

        return $model;
    }
}
