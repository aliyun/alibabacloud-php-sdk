<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDiffDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class diffDetails extends Model
{
    /**
     * @description The details of the inconsistent data, whose value is a JSON string. The JSON string contains the following parameters:
     *
     *   column: the name of the field.
     *   source: the value of the field in the source database.
     *   dest: the value of the field in the destination database.
     *   isPrimary: indicates whether the field is a primary key.
     *
     * @example [     {         "column": "id",         "source": "9511",         "dest": "9511",         "isPrimary": true     },     {         "column": "state",         "source": "3",         "dest": "2",         "isPrimary": false     },     {         "column": "create_time",         "source": "2023-04-11 14:07:17.0",         "dest": "NULL",         "isPrimary": false     },     {         "column": "update_time",         "source": "2023-04-11 06:07:17.0",         "dest": "2023-04-11 06:02:29.0",         "isPrimary": false     } ]
     *
     * @var string
     */
    public $diff;

    /**
     * @description The time when the data verification was performed.
     *
     * @example 2023-04-23T10:36:05.000+00:00
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The auto-increment primary key that is used to identify the data in a verification result.
     *
     * @example 13058****
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'diff'       => 'Diff',
        'gmtCreated' => 'GmtCreated',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diff) {
            $res['Diff'] = $this->diff;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diffDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Diff'])) {
            $model->diff = $map['Diff'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
