<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryPhoneBusinessProfileResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $about;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $profilePictureUrl;

    /**
     * @var string
     */
    public $vertical;

    /**
     * @var string[]
     */
    public $websites;
    protected $_name = [
        'about' => 'About',
        'address' => 'Address',
        'description' => 'Description',
        'email' => 'Email',
        'profilePictureUrl' => 'ProfilePictureUrl',
        'vertical' => 'Vertical',
        'websites' => 'Websites',
    ];

    public function validate()
    {
        if (\is_array($this->websites)) {
            Model::validateArray($this->websites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->about) {
            $res['About'] = $this->about;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->profilePictureUrl) {
            $res['ProfilePictureUrl'] = $this->profilePictureUrl;
        }

        if (null !== $this->vertical) {
            $res['Vertical'] = $this->vertical;
        }

        if (null !== $this->websites) {
            if (\is_array($this->websites)) {
                $res['Websites'] = [];
                $n1 = 0;
                foreach ($this->websites as $item1) {
                    $res['Websites'][$n1++] = $item1;
                }
            }
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
        if (isset($map['About'])) {
            $model->about = $map['About'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['ProfilePictureUrl'])) {
            $model->profilePictureUrl = $map['ProfilePictureUrl'];
        }

        if (isset($map['Vertical'])) {
            $model->vertical = $map['Vertical'];
        }

        if (isset($map['Websites'])) {
            if (!empty($map['Websites'])) {
                $model->websites = [];
                $n1 = 0;
                foreach ($map['Websites'] as $item1) {
                    $model->websites[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
