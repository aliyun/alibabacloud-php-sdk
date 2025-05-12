<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons\person\faces;

class person extends Model
{
    /**
     * @var faces
     */
    public $faces;

    /**
     * @var string
     */
    public $personDescription;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $personName;
    protected $_name = [
        'faces' => 'Faces',
        'personDescription' => 'PersonDescription',
        'personId' => 'PersonId',
        'personName' => 'PersonName',
    ];

    public function validate()
    {
        if (null !== $this->faces) {
            $this->faces->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faces) {
            $res['Faces'] = null !== $this->faces ? $this->faces->toArray($noStream) : $this->faces;
        }

        if (null !== $this->personDescription) {
            $res['PersonDescription'] = $this->personDescription;
        }

        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }

        if (null !== $this->personName) {
            $res['PersonName'] = $this->personName;
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
        if (isset($map['Faces'])) {
            $model->faces = faces::fromMap($map['Faces']);
        }

        if (isset($map['PersonDescription'])) {
            $model->personDescription = $map['PersonDescription'];
        }

        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        if (isset($map['PersonName'])) {
            $model->personName = $map['PersonName'];
        }

        return $model;
    }
}
