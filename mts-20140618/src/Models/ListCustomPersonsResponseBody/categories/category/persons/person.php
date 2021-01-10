<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons\person\faces;
use AlibabaCloud\Tea\Model;

class person extends Model
{
    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $personDescription;

    /**
     * @var faces
     */
    public $faces;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'personName'        => 'PersonName',
        'personDescription' => 'PersonDescription',
        'faces'             => 'Faces',
        'personId'          => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personName) {
            $res['PersonName'] = $this->personName;
        }
        if (null !== $this->personDescription) {
            $res['PersonDescription'] = $this->personDescription;
        }
        if (null !== $this->faces) {
            $res['Faces'] = null !== $this->faces ? $this->faces->toMap() : null;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return person
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PersonName'])) {
            $model->personName = $map['PersonName'];
        }
        if (isset($map['PersonDescription'])) {
            $model->personDescription = $map['PersonDescription'];
        }
        if (isset($map['Faces'])) {
            $model->faces = faces::fromMap($map['Faces']);
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
