<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\WebsiteConfiguration;

use AlibabaCloud\Tea\Model;

class indexDocument extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $suffix;

    /**
     * @description description
     *
     * @var bool
     */
    public $supportSubDir;

    /**
     * @description description
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'suffix'        => 'Suffix',
        'supportSubDir' => 'SupportSubDir',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }
        if (null !== $this->supportSubDir) {
            $res['SupportSubDir'] = $this->supportSubDir;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexDocument
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }
        if (isset($map['SupportSubDir'])) {
            $model->supportSubDir = $map['SupportSubDir'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
