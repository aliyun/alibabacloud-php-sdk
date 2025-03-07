<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabasesResponseBody;

use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @var string[]
     */
    public $databases;
    protected $_name = [
        'databases' => 'Databases',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = $this->databases;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = $map['Databases'];
            }
        }

        return $model;
    }
}
