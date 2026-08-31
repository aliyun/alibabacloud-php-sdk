<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\directories;

use AlibabaCloud\Dara\Model;

class directoryChain extends Model
{
    /**
     * @var string
     */
    public $directoryDescription;

    /**
     * @var int
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var int
     */
    public $level;
    protected $_name = [
        'directoryDescription' => 'DirectoryDescription',
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'level' => 'Level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryDescription) {
            $res['DirectoryDescription'] = $this->directoryDescription;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['DirectoryDescription'])) {
            $model->directoryDescription = $map['DirectoryDescription'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
